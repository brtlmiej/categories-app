<template>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </button>

        <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="dropdownMenuButton">
            <p class=""><b>Subcategories<br>Sorted By</b></p>
            <button @click="$emit('show-subcats-sort-by-name')" class="dropdown-item" >Category Name</button>
            <button @click="$emit('show-subcats-sort-by-create')" class="dropdown-item" >Create Date</button>
        </div>
    </div>
</template>

<script>
export default {
    name:"Dropdown"
}
</script>