    function previewLogo(event) {
  const reader = new FileReader();
  reader.onload = function(){
    document.getElementById('logoPreview').src = reader.result;
  }
  reader.readAsDataURL(event.target.files[0]);
}

  document.addEventListener('DOMContentLoaded', function () {
    // Set today’s date in the date field
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('invoice_date').value = today;
    M.updateTextFields(); // fixes label overlaps
  });

  function updateTotal() {
    const quantities = document.querySelectorAll('.qty');
    const prices = document.querySelectorAll('.price');
    let total = 0;
    for (let i = 0; i < quantities.length; i++) {
      const q = parseFloat(quantities[i].value) || 0;
      const p = parseFloat(prices[i].value) || 0;
      total += q * p;
    }
    document.getElementById('total').textContent = total.toFixed(2);
  }

  document.addEventListener('input', updateTotal);

  function addItem() {
    const itemHTML = `
      <div class="row item">
        <div class="input-field col s3">
          <input type="text" name="item_name[]" required>
          <label class="active">Item Name</label>
        </div>
        <div class="input-field col s3">
          <input type="number" name="quantity[]" class="qty" min="1" required>
          <label class="active">Quantity</label>
        </div>
        <div class="input-field col s3">
          <input type="number" name="price[]" class="price" step="0.01" required>
          <label class="active">Price</label>
        </div>
        <div class="input-field col s3 remove-btn">
          <button type="button" class="btn red remove-item" onclick="removeItem(this)">
            <i class="material-icons">delete</i>
          </button>
        </div>
      </div>`;
    document.getElementById('item-list').insertAdjacentHTML('beforeend', itemHTML);
    M.updateTextFields();
  }

  function removeItem(button) {
    const row = button.closest('.row');
    row.remove();
    updateTotal();
  }

