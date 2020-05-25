<template>
    <div
        class="btn btn-danger pull-right m-l-20 waves-effect waves-light"
        @click="handleAlertMessage"
    >
        <loading
            :active.sync="isLoading"
            :is-full-page="fullPage"
            :loader="loader"
            :color="color"
        ></loading>
        <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
        Empty trash
    </div>
</template>

<script>
export default {
    props: [
        //
    ],
    data() {
        return {
            isLoading: false,
            fullPage: true,
            loader: "dots",
            color: "#007bff"
        };
    },
    methods: {
        handleAlertMessage() {
            this.$swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                if (result.value) {
                    this.empty();
                    this.$swal("Deleted!", "Your trash is empty.", "success");
                }
            });
        },
        async empty() {
            this.isLoading = true;

            await axios
                .delete("/api/contacts/trash/empty", {
                    //
                })
                .then(response => {
                    let data = response.data;
                    this.isLoading = false;
                    window.location.reload();
                })
                .catch(error => {
                    // Show error toast message
                    this.showErrorToast();

                    this.isLoading = false;
                    console.log(error);
                });
        }
    },
    created() {
        //
    }
};
</script>
