window.Dropzone = require("./dropzone-amd-module");
Dropzone.options.photosDropzone = {
  paramName: "file",
  maxFilesize: 10,
  acceptedFiles: "image/*",
  canceled: function(res) {
    console.log("canceled: ", res);
  },
  canceledmultiple: function(res) {
    console.log("cancelled multiple: ", res);
  }
};
