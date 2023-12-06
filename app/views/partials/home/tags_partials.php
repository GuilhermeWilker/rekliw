<div class="flex items-center w-full overflow-x-auto gap-5 py-2 mb-1">
    <button class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[100px] p-2" id="add_tagsButton">
        adicionar +
    </button>
    
    <?php foreach ($tags as $tag) { ?>
    <div class="text-sm text-white font-medium hover:bg-blue-500 rounded-md border-2 border-white text-center min-w-[120px] p-2">
        <span class="text-md font-bold text-blue-500">#</span> <?php echo $tag->tag_name; ?>
    </div>
    <?php }?>
</div>