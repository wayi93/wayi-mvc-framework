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
                    <td>' . Helper::escapeHtmlValue($post['created_at']) . '</td>
                    <td>' . Helper::escapeHtmlValue($post['updated_at']) . '</td>
                    <td>' . Helper::escapeHtmlValue($post['title']) . '</td>
                    <td>' . Helper::escapeHtmlValue($post['body']) . '</td>
                </tr>';
        }
        ?>

    </table>

    <?php
}else{
    var_dump('Record not found.');
}
?>