  <form method="POST" action="generate_invoice.php" enctype="multipart/form-data">
  <div class="container">
  <!-- Header -->
<div class="sub-container">
  <div class="row invoice-header center-align">
    <!-- Centered Logo -->
    <div class="col s12">
      <img id="logoPreview" src="../../images/df.png" style="max-height: 80px;" alt="Logo" class="responsive-img center-block">
      <!-- Upload Button under Logo -->
      <div class="file-field input-field logo-upload-btn center-align">
  <div class="btn-floating btn-small blue" style="float: none; margin: 0 auto;">
    <i class="material-icons">image</i>
    <input type="file" name="logo" accept="image/*" onchange="previewLogo(event)">
  </div>
   <div class="file-path-wrapper hide-on-small-only">
  </div>
</div>
    </div>
  </div>
  <!-- Customer name (left) and Date (right) under logo -->
  <div class="row">
    <div class="input-field col s6 left-align">
      <input type="text" id="customer_name" name="customer_name" required>
      <label for="customer_name">Customer Name</label>
    </div>
    <div class="input-field col s6 right-align">
      <input type="date" id="invoice_date" name="invoice_date" >
      <label for="invoice_date">Date</label>
    </div>
  </div>
</div>
    <div id="item-list">
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
      </div>
    </div>
    <div class="right-align">
      <a class="btn blue" onclick="addItem()">Add Another Item</a>
    </div>
    <h5 class="right-align">Total: PKR <span id="total">0.00</span></h5>
    <div class="center-align">
      <button type="submit" class="btn green">Download Invoice</button>
    </div>
  </form>
</div>