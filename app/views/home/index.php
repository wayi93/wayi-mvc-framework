<style>
    table, th, td{
        border: 1px solid black;
    }
</style>
<?php
if($datas['posts'] !== null){
    ?>

    <table>
        <tr>
            <th>Created at</th>
            <th>Update at</th>
            <th>Title</th>
            <th>Content</th>
        </tr>

        <?php
        foreach ($datas['posts'] AS $post){
            echo '<tr>
                    <td>' . $post['created_at'] . '</td>
                    <td>' . $post['updated_at'] . '</td>
                    <td>' . $post['title'] . '</td>
                    <td>' . $post['body'] . '</td>
                </tr>';
        }
        ?>

    </table>

    <?php
}else{
    var_dump('Record not found.');
}
?>