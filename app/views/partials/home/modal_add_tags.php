<div id="modal" class="modal">
    <div class="bg-[#292929] mt-[50%] p-3 w-80 rounded-md relative mx-auto">

        <span id="close_tagFormModal" 
            class="text-gray-200 text-lg font-bold hover:text-black focus:text-black float-right">
            &times;
        </span>

        <form action="/tag" method="post" 
            id="add_tagsForm" class="add_tagsForm">
            
            <input 
                type="text" 
                name="tag_name" 
                class=" block w-full p-2 border-2 border-[#D9D9D9] rounded-sm bg-[#363636] outline-none" placeholder="Adicione sua tag">

            <button type="submit" 
                class="rounded-sm bg-[#2957cd] border-2 border-[#d9d9d9] text-white p-2 w-full my-2 font-bold hover:bg-[#3768E5]">
                criar tag
            </button>
        </form>
    </div>
</div>