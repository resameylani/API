<html>
    <title>Edit Produk</title>
    <body>
        <h2>Edit Produk</h2>
        <hr>
        <form action="{{ URL('produk/' . $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <th>Produk</th>
                    <td>
                        <input type="text" name="produk" value="{{ $produk->produk }}" required>
                    </td>
                </tr>

                <tr>
                    <th>Price</th>
                    <td>
                        <input type="number" name="price" value="{{ $produk->price }}" required>
                    </td>
                </tr>

                <tr>
                    <th>Stock</th>
                    <td>
                        <input type="number" name="stock" value="{{ $produk->stock }}" required>
                    </td>
                </tr>
            </table>

            <button type="submit">Update</button>
        </form>
    </body>
</html>