$(document).ready(function () {
    loadData();

    // Handling the form submission
    $('#productForm').submit(function (e) {
        e.preventDefault();

        var productName = $('#productName').val();
        var quantityInStock = $('#quantityInStock').val();
        var pricePerItem = $('#pricePerItem').val();
        var totalValue = quantityInStock * pricePerItem;

        $.ajax({
            url: 'post_data.php',
            method: 'POST',
            data: {
                action: 'save',
                product_data: JSON.stringify({
                    product_name: productName,
                    quantity_in_stock: quantityInStock,
                    price_per_item: pricePerItem,
                    date_time_submitted: new Date().toISOString(),
                    total_value: totalValue
                })
            },
            success: function () {
                $('#productForm')[0].reset();
                loadData();
            }
        });
    });

    // Loading data from the form and updating the table
    function loadData() {
        $.ajax({
            url: 'get_data.php',
            method: 'GET',
            success: function (data) {
                var products = JSON.parse(data), totalValueSum = 0, tableContent = '';

                products.forEach(function (product) {
                    tableContent += '<tr>' +
                        '<td>' + product.product_name + '</td>' +
                        '<td>' + product.quantity_in_stock + '</td>' +
                        '<td>' + parseFloat(product.price_per_item).toFixed(2) + '</td>' +
                        '<td>' + formatDate(product.date_time_submitted) + '</td>' +
                        '<td>' + parseFloat(product.total_value).toFixed(2) + '</td>' +
                        '</tr>';
                    totalValueSum += parseFloat(product.total_value);
                });

                $('#productTableBody').html(tableContent);
                $('#totalValue').text(totalValueSum.toFixed(2));
            }
        });
    }

    // Format date and time in GMT
    function formatDate(dateString) {
        var date = new Date(dateString);
        var options = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        };
        var formattedDate = date.toLocaleString('en-GB', options);
        var offset = date.getTimezoneOffset() / 60;
        var timezone = offset < 0 ? `GMT+${Math.abs(offset)}` : `GMT-${offset}`;
        return formattedDate + ' ' + timezone;
    }
});
