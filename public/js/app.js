document.getElementById('filter_manufacturer_id').addEventListener('change', function() {
    //alert('You selected: ' + this.value);

    let manufacturerId = this.value;
    //Had to drop ' || this.option[this.selectedIndex].value ' as the web browser Opera has issues with it.
    //When going back to 'All Manufacturers' after selecting any option, the filtering would still be up, and it would never go back to null.

    window.location.href = window.location.href.split("?")[0] + "?manufacturer_id=" + manufacturerId;
});

