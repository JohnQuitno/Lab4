function Validate()
{
  if((document.getElementById("quantity1").value<0)||(document.getElementById("quantity1").value == false))
  {
    alert("Please enter a valid ssd quantity");
    document.location.reload();
  }
  if((document.getElementById("quantity2").value<0)||document.getElementById("quantity2").value == false)
  {
    alert("Please enter a valid graphics card quantity");
    document.location.reload();
  }
  if((document.getElementById("quantity3").value<0)||document.getElementById("quantity3").value == false)
  {
    alert("Please enter a valid ram quantity");
    document.location.reload();
  }
  if(document.getElementById("Username").value == false)
  {
    alert("Username is blank.");
    document.location.reload();
  }
  if(document.getElementById("Password").value == false)
  {
    alert("Password is blank.");
    document.location.reload();
  }

  if((document.getElementById("free").checked == false)&&(document.getElementById("50").checked == false)&&(document.getElementById("5").checked == false))
  {
    alert("Please Select a shipping option.");
    document.location.reload();
  }
  if(!(document.getElementById("Username").value.includes(".com"))||!(document.getElementById("Username").value.includes("@")))
  {
    alert("Please enter a username in the form Username@domain.com");
    document.location.reload();
  }
}
function Reset()
{
  document.getElementById("form").reset();
  doxument.location.reload();
}
