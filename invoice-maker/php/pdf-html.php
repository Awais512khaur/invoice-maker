<?php
$html = "
<html>
<head>
  <style>
    body { font-family: sans-serif; }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }
    .logo {
        text-align: center;
    }
    .logo img {
        max-height: 80px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
    }
    table, th, td {
        border: 1px solid #999;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    .total {
        text-align: right;
        margin-top: 20px;
        font-size: 18px;
    }
  </style>
</head>
<body>
  <div class='header'>
    <div class='logo'><img src='{$logo_src}' alt='Logo'></div>
    <div><strong>Customer Name:</strong> {$customer_name}</div><br>
    <div><strong>Date:</strong> {$date}</div>
  </div>

  <table>
    <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      {$rows}
    </tbody>
  </table>

  <div class='total'><strong>Total: PKR ".number_format($total, 2)."</strong></div>
</body>
</html>
";
?>