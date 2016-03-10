/**
 * Created by User on 10-Mar-16.
 */
    function delpost(id, title)
    {
        if (confirm("Are you sure you want to delete '" + title + "'"))
        {
            window.location.href = 'index.php?delpost=' + id;
        }
    }