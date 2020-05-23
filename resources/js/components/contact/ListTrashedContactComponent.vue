<template>
    <div class="row">
        <loading
            :active.sync="isLoading"
            :is-full-page="fullPage"
            :loader="loader"
            :color="color"
        ></loading>

        <div v-if="contacts">
            <div
                class="col-md-4 col-sm-4 col-xs-4 m-b-40"
                v-for="contact in contacts"
                :key="contact.id"
            >
                <h3 class="box-title">
                    {{ contact.first_name }}
                </h3>
                <p class="text-muted">
                    {{ contact.email }}
                </p>
                <p class="text-muted">
                    {{ contact.phone }}
                </p>
                <button
                    class="btn-success waves-effect waves-light"
                    @click="edit(contact.id)"
                >
                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                </button>
                <button
                    class="btn-info m-l-5 waves-effect waves-light"
                    @click="sync(contact.id)"
                >
                    <i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
                </button>
                <button
                    class="btn-danger m-l-5 waves-effect waves-light"
                    @click="destroy(contact.id)"
                >
                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div v-else>
            <empty-component
                title="Nothing to see here"
                description="Click at the button above to create a new contact."
                :show-action-button="true"
                button-url="/contacts/new"
                button-title="Create contact"
            ></empty-component>
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
