<template>
  <div class="form-horizontal form-material">
    <div class="form-group">
      <label class="col-md-12">File</label>
      <div class="col-md-12">
        <input
          type="file"
          placeholder="File"
          name="file"
          :multiple="false"
          id="file"
          accept=".csv"
          accesskey="i"
          size="50mb"
          class="form-control form-control-line"
          ref="file"
        />
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <button class="btn btn-info" @click="handleImport">Import</button>
      </div>
    </div>
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
      color: "#007bff",
      model: { file: "" }
    };
  },
  methods: {
    handleImport() {
      this.$swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, import it!"
      }).then(result => {
        let file = this.$refs.file.files[0];
        if (result.value) {
          const response = this.update();
        }
      });
    },
    async update(param) {
      this.isLoading = true;

      let file = this.$refs.file.files[0];
      var formData = new FormData();
      formData.append("file", file);

      await axios
        .post("/api/contacts/import", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
        })
        .then(response => {
          let data = response.data;
          this.isLoading = false;
          this.showSuccessToast();

          window.location.href = "/contacts";
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
      this.$swal("Imported!", "Your file was imported.", "success");
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
    //
  }
};
</script>
