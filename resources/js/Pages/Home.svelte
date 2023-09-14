<script lang="ts">
    import axios from 'axios'
    export let name = ""
    let productName: string = ""
    let products: string[] = []


    const handleSubmit = async () => {
        products = await axios.get(`http://localhost/api/product/${productName}`)
            .then(data => data.data)
            .then(data => {
                return data
            })
    }

</script>

<h1 class="text-3xl">Menu Del Hogar</h1>
<h2>Welcome{(name === "" ? "!": ` ${name}!`)}</h2>
<h2>Search for products and see how long they will last you!</h2>
<form on:submit|preventDefault={handleSubmit}>
    <input type="text" name="productName" id="productName" bind:value={productName}>
    <button>Search</button>
</form>
{#each products as product}
    <h1>{product.name}</h1>
{/each}

