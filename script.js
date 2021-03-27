function getCalculation() {
  const firstN = document.getElementById("firstN").value;
  const secN = document.getElementById("secN").value;
  const operation = document.getElementById("operation").value;

  console.log(firstN, secN, operation);

  var xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    `process.php?operation=${operation}&firstN=${firstN}&secN=${secN}`,
    true
  );
  xhr.onload = function () {
    document.getElementById("result").innerHTML = this.responseText;
  };

  xhr.send();
}
