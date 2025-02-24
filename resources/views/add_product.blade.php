<form method="POST" action="/add-new-product">
    {{ csrf_field() }}
    <input required name="name" type="text" placeholder="Enter the name of product">
    <input required name="description" type="text" placeholder="Enter the description of product">
    <input required name="amount" type="number" placeholder="Enter the amount of product">
    <input required name="price" type="number" placeholder="Enter the price of product">
    <button>Save product</button>
</form>