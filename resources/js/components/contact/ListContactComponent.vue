<template>
    <div class="row" v-if="contacts">
        <loading
            :active.sync="isLoading"
            :is-full-page="fullPage"
            :loader="loader"
            :color="color"
        ></loading>
        <div
            class="col-lg-4 col-sm-6 col-xs-12"
            v-for="contact in contacts"
            :key="contact.id"
        >
            <div class="white-box analytics-info">
                <h3 class="box-title">{{ contact.first_name }}</h3>
                <p class="list-inline two-part">
                    <strong>Email:</strong> {{ contact.email }}
                </p>
                <p class="list-inline two-part">
                    <strong>Phone:</strong> {{ contact.phone }}
                </p>
                <div class="list-inline two-part">
                    <hr />
                </div>
                <div class="list-inline action-buttons">
                    <button
                        class="btn btn-success waves-effect waves-light"
                        @click="edit(contact.id)"
                    >
                        <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                        Edit
                    </button>
                    <button
                        class="btn btn-info m-l-5 waves-effect waves-light"
                        @click="sync(contact.id)"
                    >
                        <i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
                        Sync
                    </button>
                    <button
                        class="btn btn-danger m-l-5 waves-effect waves-light"
                        @click="handleDeleteAlertMessage(contact.id)"
                    >
                        <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["contacts"],
    data() {
        return {
            isLoading: false,
            fullPage: true,
            loader: "dots",
            color: "#007bff"
        };
    },
    methods: {
        edit(param) {
            if (param) window.location.href = `/contacts/edit/${param}`;
        },
        async sync(param) {
            this.isLoading = true;

            await axios
                .patch(`/api/contacts/${param}`, {
                    //
                })
                .then(response => {
                    let data = response.data;
                    this.isLoading = false;
                    this.showSuccessToast();
                })
                .catch(error => {
                    this.showErrorToast();

                    this.isLoading = false;
                    console.log(error);
                });
        },
        handleDeleteAlertMessage(param) {
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
                    this.destroy(param);
                    this.$swal(
                        "Deleted!",
                        "Your contact has been deleted.",
                        "success"
                    );
                }
            });
        },
        async destroy(param) {
            this.isLoading = true;

            await axios
                .delete(`/api/contacts/${param}`, {
                    //
                })
                .then(response => {
                    let data = response.data;
                    this.isLoading = false;
                    window.location.reload();
                })
                .catch(error => {
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
