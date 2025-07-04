function addNewItem() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "addItem.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('resultMsg').innerHTML = "Item added successfully! Item Number is: " + xhr.responseText;
        }
    };

    var data = "itemName=" + document.getElementById('itemName').value +
               "&price=" + document.getElementById('price').value +
               "&quantity=" + document.getElementById('quantity').value +
               "&description=" + document.getElementById('description').value;
    xhr.send(data);
    return false; // Prevent form from submitting normally
}
