# SPAM-DETECTOR-API

## find all trending spam messages

+ Endpoint : ``/api/trending/findAll``
+ HTTP Method : ``GET``
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code": 200,
    "status": "OK",
    "data": [
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        }
    ]
}
```

## find all messages by number

+ Endpoint : ``/api/trending/{nomor}``
+ HTTP Method : ``GET``
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code": 200,
    "status": "OK",
    "data": [
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        }
    ]
}
```

+ Response Body (Fail) :

## find detail trending spam messages

+ Endpoint : ``/api/detail/{nomor}``
+ HTTP Method : ``GET``
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code": 200,
    "status": "OK",
    "data": {
        "id": 123,
        "tanggal": "20-03-2001",
        "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
        "nomor": "081292930102",
        "kategori": "SPAM",
        "jenis_provider": "TELKOMSEL"
    }
}
```

+ Response Body (Fail) :
```json
{
    "status": 404,
    "error": "Not Found",
    "message": "Nomor not found"
}
```

## find all spam messages

+ Endpoint : ``/api/findAll``
+ HTTP Method : ``GET``
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code": 200,
    "status": "OK",
    "data": [
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        },
        {
            "id": 123,
            "tanggal": "20-03-2001",
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "nomor": "081292930102",
            "kategori": "SPAM",
            "jenis_provider": "TELKOMSEL"
        }
    ]
}
```

## search spam messages

+ Endpoint : ``/api/search/{nomor}``
+ HTTP Method : ``GET``
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code": 200,
    "status": "OK",
    "data": [
        {
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "jumlah": "2",
            "nomor": "085231285392"
        },
        {
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "jumlah": "2",
            "nomor": "085231285392"
        },
        {
            "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
            "jumlah": "2",
            "nomor": "085231285392"
        }
    ]
}
```

+ Response Body (Fail) :
```json
{
    "code": 404,
    "error": "Not Found",
    "message": "Nomor tidak ditemukan"
}
```


## Store new spam messages

+ Endpoint : ``/api/store``
+ HTTP Method : ``POST``
+ Request Body :
```json
{
    "isi": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12",
    "jumlah": "2",
    "nomor": "085231285392",
    "tanggal": "22-01-2020",
    "kategori": "Penipuan",
    "id_pengirim": "1",
    "nama_pengirim": "Benyamin",
    "jenis_provider": "Telkomsel"
}
```

+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code"     : 201,
    "status"   : "Created",
    "message"  : "Insert Data Success"
}
```


## Classify SMS

+ Endpoint : ``/api/sms``
+ HTTP Method : ``POST``
+ Request Body :
```json
{
    "sms": "Anda terpilih  pemenang  cek tunal Rp.1 75.jt  CODE ID (25F4777)  U/infO klik  s.id/super-csl 2-12"
}
```
+ Request Header :
    + Accept : ``application/json``
+ Response Body (Success) :

```json
{
    "code"     : 200,
    "status"   : "SMS berhasil di klasifikasi",
    "message"  : "SPAM"
}
```
