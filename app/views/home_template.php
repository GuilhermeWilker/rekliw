<ul>
<?php foreach ($users as $user) { ?>
    <li class='p-3 my-2 border-2 border-gray-200 rounded-sm'>
        <?php echo $user->name; ?> | 
        <a href="/user/<?php echo $user->id; ?>" 
        class="text-sm hover:font-bold">
            detalhes
        </a>
    </li>
<?php } ?>
</ul>
