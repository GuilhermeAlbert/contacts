<template>
    <div class="box">
        <img
            class="box-picture"
            src="website/images/box.svg"
            alt="Box picture"
        />
        <h2 v-if="title">{{ title }}</h2>
        <p v-if="description">{{ description }}</p>
        <button v-if="showActionButton" class="btn" @click="goToUrl">
            {{ buttonTitle }}
        </button>
    </div>
</template>

<script>
export default {
    props: [
        "title",
        "description",
        "showActionButton",
        "buttonUrl",
        "buttonTitle"
    ],
    methods: {
        goToUrl() {
            window.location.href = this.buttonUrl;
        }
    }
};
</script>

<style scoped>
.box {
    display: flex;
    flex: 1;
    align-content: center;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
}
.box-picture {
    width: 150px;
}
</style>
