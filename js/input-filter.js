// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter, errMsg) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
      textbox.addEventListener(event, function(e) {
        if (inputFilter(this.value)) {
          // Accepted value
          if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
            this.classList.remove("input-error");
            this.setCustomValidity("");
          }
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          // Rejected value - restore the previous one
          this.classList.add("input-error");
          this.setCustomValidity(errMsg);
          this.reportValidity();
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          // Rejected value - nothing to restore
          this.value = "";
        }
      });
    });
  }
  
  // Install input filters.
/* 
  setInputFilter(document.getElementById("intTextBox"), function(value) {
    return /^-?\d*$/.test(value); }, "Must be an integer");
  setInputFilter(document.getElementById("uintTextBox"), function(value) {
    return /^\d*$/.test(value); }, "Must be an unsigned integer");
  setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); }, "Must be between 0 and 500");
  setInputFilter(document.getElementById("floatTextBox"), function(value) {
    return /^-?\d*[.,]?\d*$/.test(value); }, "Must be a floating (real) number");
  setInputFilter(document.getElementById("currencyTextBox"), function(value) {
    return /^-?\d*[.,]?\d{0,2}$/.test(value); }, "Must be a currency value");
  setInputFilter(document.getElementById("latinTextBox"), function(value) {
    return /^[a-z]*$/i.test(value); }, "Must use alphabetic latin characters");
  setInputFilter(document.getElementById("hexTextBox"), function(value) {
    return /^[0-9a-f]*$/i.test(value); }, "Must use hexadecimal characters");
*/
  // Install input filters.
  setInputFilter(document.getElementById("contraventionS"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 9999); }, "Il doit s'agir de chiffres et de moins de 5 chiffres");
  
  setInputFilter(document.getElementById("contraventionL"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 9999999999); }, "Il doit s'agir de chiffres et de moins de 11 chiffres");
  
  setInputFilter(document.getElementById("GSM"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 999999999999); }, "Il doit s'agir de chiffres et de moins de 15 chiffres");
  
  setInputFilter(document.getElementById("CodePostal"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
  setInputFilter(document.getElementById("matriculeL"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
  setInputFilter(document.getElementById("matriculeS"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99); }, "Il doit s'agir de chiffres et de moins de 2 chiffres");

  setInputFilter(document.getElementById("CodePostalFP"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
  setInputFilter(document.getElementById("cinSFP"), function(value) {
    return /^[a-z]*$/i.test(value); }, "Must use alphabetic latin characters");
  
  setInputFilter(document.getElementById("cinLFP"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 999999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
  setInputFilter(document.getElementById("permiSFP"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99); }, "Il doit s'agir de chiffres et de moins de 2 chiffres");
  
  setInputFilter(document.getElementById("permiLFP"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 999999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
  setInputFilter(document.getElementById("CodePostal_FM"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 999999); }, "Il doit s'agir de chiffres et de moins de 6 chiffres");
  
    
//******************ARABIC VALUE******************** *///******************ARABIC VALUE******************** */
var yas;
function arabicValue(txt) {
    yas = txt.value;
yas = yas.replace(/`/g, "??");
yas = yas.replace(/0/g, "??");
yas = yas.replace(/1/g, "??");
yas = yas.replace(/2/g, "??");
yas = yas.replace(/3/g, "??");
yas = yas.replace(/4/g, "??");
yas = yas.replace(/5/g, "??");
yas = yas.replace(/6/g, "??");
yas = yas.replace(/7/g, "??");
yas = yas.replace(/8/g, "??");
yas = yas.replace(/9/g, "??");
yas = yas.replace(/0/g, "??");
yas  = yas.replace(/q/g, "??");
yas  = yas.replace(/w/g, "??");
yas  = yas.replace(/e/g, "??");
yas  = yas.replace(/r/g, "??");
yas  = yas.replace(/t/g, "??"); 
yas  = yas.replace(/y/g, "??");
yas  = yas.replace(/u/g, "??");
yas  = yas.replace(/i/g, "??");
yas  = yas.replace(/o/g, "??");
yas  = yas.replace(/p/g, "??");
yas  = yas.replace(/\[/g, "??");
yas  = yas.replace(/\]/g, "??");
yas  = yas.replace(/a/g, "??");
yas  = yas.replace(/s/g, "??");
yas  = yas.replace(/d/g, "??");
yas  = yas.replace(/f/g, "??");
yas  = yas.replace(/g/g, "??");
yas  = yas.replace(/h/g, "??");
yas  = yas.replace(/j/g, "??");
yas  = yas.replace(/k/g, "??");
yas  = yas.replace(/l/g, "??");
yas = yas.replace(/\;/g, "??");
yas  = yas.replace(/\'/g, "??");
yas  = yas.replace(/z/g, "??");
yas  = yas.replace(/x/g, "??");
yas  = yas.replace(/c/g, "??");
yas  = yas.replace(/v/g, "??");
yas  = yas.replace(/b/g, "????");
yas  = yas.replace(/n/g, "??");
yas  = yas.replace(/m/g, "??");
yas  = yas.replace(/\,/g, "??");
yas  = yas.replace(/\./g, "??");
yas  = yas.replace(/\//g, "??");
yas  = yas.replace(/~/g, " ??");
yas  = yas.replace(/Q/g, "??");
yas  = yas.replace(/W/g, "??");
yas  = yas.replace(/E/g, "??");
yas  = yas.replace(/R/g, "??");
yas  = yas.replace(/T/g, "????");
yas  = yas.replace(/Y/g, "??");
yas  = yas.replace(/U/g, "???");
yas  = yas.replace(/I/g, "??");
yas  = yas.replace(/O/g, "??");
yas  = yas.replace(/P/g, "??");
yas  = yas.replace(/A/g, "??");
yas  = yas.replace(/S/g, "??");
yas  = yas.replace(/G/g, "????");
yas  = yas.replace(/H/g, "??");
yas  = yas.replace(/J/g, "??");
yas  = yas.replace(/K/g, "??");
yas  = yas.replace(/L/g, "/");
yas  = yas.replace(/Z/g, "~");
yas  = yas.replace(/X/g, "??");
yas  = yas.replace(/B/g, "????");
yas  = yas.replace(/N/g, "??");
yas  = yas.replace(/M/g, "???");
yas  = yas.replace(/\?/g, "??");
txt.value = yas;
}