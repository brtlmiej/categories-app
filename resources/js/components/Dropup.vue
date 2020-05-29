<template>
    <div class="dropup">
        <button @click="$emit('hide-subcats')" class="btn btn-secondary  dropdown-toggle mr-2" type="button" title="Hide subcategories"></button>
    </div>
</template>

<script>
export default {
    name:"Dropup"
}
</script>