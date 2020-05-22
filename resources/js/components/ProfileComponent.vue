<template>
    <div class="white-box">
        <div class="form-horizontal form-material">
            <div class="form-group">
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                    <input
                        type="text"
                        placeholder="Johnathan Doe"
                        class="form-control form-control-line"
                        v-model="model.name"
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
                        name="example-email"
                        id="example-email"
                        v-model="model.email"
                    />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input
                        type="password"
                        value="password"
                        class="form-control form-control-line"
                        v-model="model.password"
                    />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success" @click="handleSubmit">
                        Update Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["user", "title", "description"],
    data() {
        return {
            isLoading: false,
            fullPage: true,
            loader: "dots",
            color: "#007bff",
            model: {
                name: "",
                email: "",
                password: ""
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
                .patch(`/api/users/${this.user.id}`, {
                    name: this.user.name,
                    email: this.user.email,
                    password: this.user.password
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
            //
        },
        showSuccessToast() {
            //
        }
    },
    created() {
        this.model.name = this.user.name;
        this.model.email = this.user.email;
    }
};
</script>
