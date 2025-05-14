 function previewLogo(event) {
    const reader = new FileReader();
    const fileInput = event.target;
    const fileNameLabel = document.getElementById('logo-file-name');
    const logoPreview = document.getElementById('logoPreview');

    if (fileInput.files && fileInput.files[0]) {
      const file = fileInput.files[0];
      reader.onload = function (e) {
        logoPreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
      
      if (fileNameLabel) fileNameLabel.textContent = file.name;
    }
  }