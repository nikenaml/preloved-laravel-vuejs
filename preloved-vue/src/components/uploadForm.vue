<template>
  <div class="card-body">
    <div v-if="success != ''" class="alert alert-success" role="alert">{{success}}</div>

    <form @submit.prevent="submitForm" method="POST">
      <input ref="uploadFormToken" type="hidden" name="_token" value />
      <div class="form-group">
        <label form="email">Nama</label>
        <input
          type="text"
          class="form-control"
          name="title"
          v-model="title"
          v-validate="'required'"
        />
        <div
          class="form-control-feedback mt-1 p-2 rounded alert-danger"
          v-show="errors.has('title:required')"
        >Please enter a title</div>
      </div>

      <div
        :class="['form-group has-float-label', {'has-danger': errors.has('image') || errorImageDimension}]"
      >
        <input
          type="file"
          name="image"
          class="form_control"
          placeholder="..."
          v-validate.reject="'image'"
          @change="validateImage($event)"
        />
        <span>Image (300.300px)</span>('
        <div
          class="form-control-feedback mt-1 p-2 rounded alert-danger"
          v-show="errors.has('image:image')"
        >Please only upload image file types</div>
        <div
          class="form-control-feedback mt-1 p-2 rounded alert-danger"
          v-show="errorImageDimension"
        >Image must be between 300 and 300px</div>
      </div>
      <button
        type="submit"
        class="btn btn-primary btn-block"
        :disabled="errors.any() || this.working || this.errorImageDimension"
      >{{ working ? 'Uploading...' : 'Upload' }}</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      working: false,
      imageInput: {},
      errorImageDimension: false,
      title: "",
      success: ""
    };
  },
  mounted() {
    this.$refs.uploadFormToken.value = csrfToken;
  },

  methods: {
    validateImage(event) {
      let _URL = window.URL || window.webkitURL;
      this.imageInput = event.target.files[0];
      let img = new Image();

      img.src = _URL.createObjectURL(this.imageInput);
      img.onload = () => {
        _URL.revokeObjectURL(img.src);
        if (img.naturalWidth > 300 || img.naturalHeight > 300) {
          this.errorImageDimension = true;
        } else {
          this.errorImageDimension = false;
        }
      };
    },
    submitForm() {
      this.$validator.validateAll().then(result => {
        if (!result || _.isEmpty(this.imageInput.name)) return;

        let data = new FormData();
        data.append("image", this.imageInput);
        data.append("title", this.title);

        axios.post("upload-image", data).then(response => {
          this.success = response.data.success;
        });
      });
    }
  }
};
</script>