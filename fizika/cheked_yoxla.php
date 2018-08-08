<!DOCTYPE html>
<html>
<head>
  <style>
  div { color:red; }
  </style>
  <script src="jquery-latest.js"></script>
</head>
<body>
  
<form>
  <p>
    <input type="checkbox" name="newsletter" checked="checked" value="Hourly" />

    <input type="checkbox" name="newsletter" value="Daily" />
    <input type="checkbox" name="newsletter" value="Weekly" />

    <input type="checkbox" name="newsletter" value="Monthly" />
    <input type="checkbox" name="newsletter" value="Yearly" />
  </p>
</form>
<div></div>

<script>
function countChecked() {
  var n = $("input:checked").length;
  $("div").text(n + (n === 1 ? " is" : " are") + " checked!");
}
countChecked();
$(":checkbox").click(countChecked);
</script>

</body>
</html>