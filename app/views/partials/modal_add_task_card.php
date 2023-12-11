<div id="taskCardModal" class="modal">
<span onclick="hidetaskCardModal()" 
            class="text-gray-200 text-3xl font-bold  float-right">
            &times;
        </span>
    <div class="bg-[#eaeaec] mt-[20%] p-3 w-80 rounded-md relative mx-auto">
        <form action="" method="post" class="w-full"
            id="add_taskCardModal" class="add_tagsForm">

            <textarea 
                class="w-[50em] p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#eaeaec] outline-none text-black"  id="content-task"></textarea>
            

            <button type="submit" 
                class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]">
                criar tarefa
            </button>
        </form>
    </div>
</div>