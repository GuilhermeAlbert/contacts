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
                        class="btn btn-info m-l-5 waves-effect waves-light"
                        @click="restore(contact.id)"
                    >
                        <i class="fa fa-reply fa-fw" aria-hidden="true"></i>
                        Restore
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
        restore(param) {
            this.isLoading = true;

            axios
                .patch("/api/contacts/trash/restore", {
                    contact_id: param
                })
                .then(response => {
                    let data = response.data;
                    this.isLoading = false;
                    window.location.href = "/contacts";
                })
                .catch(error => {
                    this.showErrorToast();

                    this.isLoading = false;
                    console.log(error);
                });
        },
        async destroy(param) {
            this.isLoading = true;

            await axios
                .patch(`/api/contacts/${this.user.id}`, {
                    name: this.model.name,
                    email: this.model.email,
                    password: this.model.password
                })
                .then(response => {
                    let data = response.data;
                    this.isLoading = false;
                    this.showSuccessToast();
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
