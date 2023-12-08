<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
label
{
width:120px;
padding: left 50%;
float: left;
}
</style>
<body>
<h1>SUMBER BERKAH</h1>
    <form action="OutputLatihan2.php">
        <div>
            <label class="label">Kode Transaksi     :</label> 
            <input type="text" name="kode"> 
        </div>
        <br>
        <div>
            <label class="label">Tanggal     :</label> 
            <input type="date" name="date"> 
        </div>
        <br>
            
        

        <div tyle="margin-bottom: 1rem;">
            <label>Custommer:</label>
                <select name="customer">
                    <option value="zahwa">Zahwa</option>
                    <option value="fauzan">Fauzan</option>
                    <option value="zahwa">Hilman</option>
                    <option value="fauzan">Ahmad</option>
                </select>
        </div>
        <br>

        <div tyle="margin-bottom: 1rem;">
            <label>Barang1:</label> 
                <select name="customer1">
                    <option value="beras">Beras</option>
                    <option value="gula">Gula</option>
                    <option value="Air">Air Minerale</option>
                    <option value="garam">Garam</option>
                </select>
        </div>
        <br>

        <div tyle="margin-bottom: 1rem;">
            <label>Barang2:</label> 
                <select name="customer2">
                    <option value="beras">Beras</option>
                    <option value="gula">Gula</option>
                    <option value="Air">Air Minerale</option>
                    <option value="garam">Garam</option>
                </select>
        </div>
        <br>

        <div tyle="margin-bottom: 1rem;">
            <label>Barang3:</label> 
                <select name="customer3">
                    <option value="beras">Beras</option>
                    <option value="gula">Gula</option>
                    <option value="Air">Air Minerale</option>
                    <option value="garam">Garam</option>
                </select>
        </div>
        <br>

        <div>
        <label>Punya Kartu Member?    </label> 
            <input type="radio" name="subject" value="ya">YA
            <input type="radio" name="subject" value="ya">Tidak
        </div>
        <br>
        <br>
        <div>
            <label class="label">Uang Pembayaran:</label> 
            <input type="text" name="uangpembayaran"> 
        </div>
        <br>
        <br>

        <div>
            <input type="submit" value="Simpan">
            <input type="reset" value="Batal">
        </div>

</body>
</html>