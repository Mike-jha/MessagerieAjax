$(function() {

/**
 * Convert datetime to human
 * 
 * @param {*} value
 * @return String
 */
function convertDate(value) {
    var inputFormat = new Date(value*1000)
    function pad(s) { return (s < 10) ? '0' + s : s; }
    var d = new Date(inputFormat);
    return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/') + ' ' + d.getHours() + "H" + d.getMinutes();
} 

});