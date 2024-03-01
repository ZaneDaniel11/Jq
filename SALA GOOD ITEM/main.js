$(document).ready(function () {
    $.ajax({
        url: "category.php",
        dataType: "json",
        success: function (data) {
            console.log(data);
            
            $.each(data, function (index, item) {
              
                var newRow = $("<tr>");

                newRow.append('<td class="id">' + item.Category_id + '</td>');
                newRow.append('<td class="Category">' + item.Name + '</td>');
                newRow.append('<td class="Date">' + item.Date_Created + '</td>');

              
                $("#tableBody").append(newRow);
            });
        },
        error: function (xhr, status, error) {
            console.error("Error fetching data:", status, error);
        
        }
    });
});
