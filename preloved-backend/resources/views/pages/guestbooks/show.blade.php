<table class="table table-bordered">
    <tr>
        <th>Nama Tamu</th>
        <td>{{ $item->nama_tamu }}</td>
    </tr>

    <tr>
        <th>Email Tamu</th>
        <td>{{ $item->email_tamu }}</td>
    </tr>

    <tr>
        <th>Asal Tamu</th>
        <td>{{ $item->asal_tamu }}</td>
    </tr>

    <tr>
        <th>No HP</th>
        <td>{{ $item->nohp_tamu }}</td>
    </tr>

    <tr>
        <th>Komentar</th>
        <td>{{ strip_tags ($item->komentar_tamu) }}</td>
    </tr>

    <tr>
        <th>Penilaian</th>
        <td>{{ $item->nilai_tamu }}</td>
    </tr>
</table>
