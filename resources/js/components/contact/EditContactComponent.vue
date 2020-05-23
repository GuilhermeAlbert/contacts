<template>
    <div class="white-box">
        <loading
            :active.sync="isLoading"
            :is-full-page="fullPage"
            :loader="loader"
            :color="color"
        ></loading>
        <div class="form-horizontal form-material">
            <div class="form-group">
                <label class="col-md-12">First Name</label>
                <div class="col-md-12">
                    <input
                        type="text"
                        placeholder="Johnathan Doe"
                        class="form-control form-control-line"
                        v-model="model.first_name"
                    />
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input
                        type="email"
                        placeholder="johnathan@admin.com"
                        class="form-control form-control-line"
                        first_name="example-email"
                        id="example-email"
                        v-model="model.email"
                    />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Phone</label>
                <div class="col-md-12">
                    <input
                        type="text"
                        value="phone"
                        class="form-control form-control-line"
                        v-model="model.phone"
                    />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success" @click="handleSubmit">
                        Update contact
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["contact"],
    data() {
        return {
            isLoading: false,
            fullPage: true,
            loader: "dots",
            color: "#007bff",
            model: {
                first_name: "",
                email: "",
                phone: ""
            }
        };
    },
    methods: {
        async handleSubmit() {
            await this.update();
        },
        update() {
            console.log("Component is updating.");

            this.isLoading = true;

            axios
                .patch(`/api/contacts/${contact.id}`, {
                    first_name: this.model.first_name,
                    email: this.model.email,
                    phone: this.model.phone
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
        showErrorToast() {
            Vue.$toast.open({
                message: "The data wasn't changed.",
                type: "error",
                duration: 3000,
                position: "top",
                queue: true
            });
        },
        showSuccessToast() {
            Vue.$toast.open({
                message: "The data was changed.",
                type: "success",
                duration: 3000,
                position: "top",
                queue: true
            });
        }
    },
    created() {
        this.model.first_name = this.contact.first_name;
        this.model.email = this.contact.email;
        this.model.phone = this.contact.phone;
    }
};
</script>
