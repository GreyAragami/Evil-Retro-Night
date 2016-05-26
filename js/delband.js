/**
 * Created by User on 11-Mar-16.
 */
function delband(id, band_name) {
    if (confirm("Are you sure you want to delete '" + band_name + "'")) {
        window.location.href = 'index.php?delband=' + id;
    }
}