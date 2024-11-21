document.getElementById("registrationForm").addEventListener("submit", function (event) {
  const fileInput = document.getElementById("file");
  const file = fileInput.files[0];
  if (file) {
    const fileSize = file.size / 1024 / 1024; // in MB
    const fileType = file.type;
    if (fileSize > 2) {
      alert("File size must not exceed 2MB.");
      event.preventDefault();
    }
    if (fileType !== "text/plain") {
      alert("Only text files are allowed.");
      event.preventDefault();
    }
  }
});
