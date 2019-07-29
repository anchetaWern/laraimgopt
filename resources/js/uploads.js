window.Dropzone = require("./dropzone-amd-module");
Dropzone.options.photosDropzone = {
  paramName: "file", // the name of the request parameter when the file is uploaded
  maxFilesize: 10, // maximum size for each file in Mb
  acceptedFiles: "image/*", // only accept image files
};
