<html>
    <title>create produk</title>
    <body>
        <h2>create produk</h2>
        <hr>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ URL('produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <table>
                <tr>
                    <th>produk</th>
                    <td>
                        <input type="text" name="produk" required>
                    </td>
                </tr>

                <tr>
                    <th>price</th>
                    <td>
                        <input type="number" name="price" required>
                    </td>
                </tr>

                <tr>
                    <th>stock</th>
                    <td>
                        <input type="text" name="stock" required>
                    </td>
                </tr>
                 </table>
                 <button type="submit">save</button>
            </form>
        </body>
    </html>