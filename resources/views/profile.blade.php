<h1>Profile contoh if</h1>
    <hr>
    <table border ='0'
    @if($nama =='resa meylani')

    <tr>
        <td> Nama Lengkap: </td>
        <td> {{$nama}} </td>
    </tr>
    @else
    <tr>
        <td> Nama Lengkap: </td>
        <td> tidak ada nama</td>
    </tr>
@endif
</table>
<hr>
<h1>Contoh foreach </h1>
<table>
    @foreach($data_array ['nama'] as $data)
    <tr>
        <td> Nama </td>
        <td> {{ $data }} </td>
    </tr>
    @endforeach
</table>

<h1>Contoh forelse </h1>
<table>
    @forelse($data_array ['nama'] as $data)
    <tr>
        <td> Nama </td>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse
</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<5;$i++)
        {{$i}}<br>
    @endfor
</table>