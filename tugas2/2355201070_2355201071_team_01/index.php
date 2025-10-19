<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Tiket Bioskop</title>
    <style>
       
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 40px 0;
            color: #fff;
            overflow-y: auto;
        }

        
        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 420px;
            height: auto;
            box-sizing: border-box;
            backdrop-filter: blur(10px);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
        }

       
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid transparent;
            outline: none;
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
            font-size: 14px;
            box-sizing: border-box;
            appearance: none;
           
        }

        select.form-control {
            background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='16' viewBox='0 0 24 24' width='16' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .is-invalid {
            border-color: #e84118;
        }

        .invalid-feedback {
            color: #ff7675;
            font-size: 13px;
            margin-top: 4px;
            display: block;
        }

        
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            color: #fff;
            margin-top: 10px;
            font-size: 15px;
            transition: background 0.3s;
        }

        .btn-primary {
            background-color: #00a8ff;
        }

        .btn-primary:hover {
            background-color: #0097e6;
        }

        .btn-secondary {
            background-color: #4cd137;
        }

        .btn-secondary:hover {
            background-color: #44bd32;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .modal-content {
            background-color: #1e272e;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .seat {
            width: 35px;
            height: 35px;
            margin: 5px;
            border-radius: 5px;
            display: inline-block;
            background-color: #44bd32;
            cursor: pointer;
            transition: 0.2s;
            line-height: 35px;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
        }

        .seat.selected {
            background-color: #00a8ff;
        }

        .seat.booked {
            background-color: #e84118;
            cursor: not-allowed;
        }

        option {
            background-color: #ffffff;
            color: #000000;
           
        }

        .close-btn {
            margin-top: 20px;
            background-color: #e84118;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .close-btn:hover {
            background-color: #c23616;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Form Pembelian Tiket</h2>

        
        <form action="proses.php" method="POST">

            <div class="form-group">
                <label>Judul Film</label>
                <select name="judul_film" class="form-control" required>
                    <option value="">-- Pilih Film --</option>
                    <option>Rangga & Cinta</option>
                    <option>Dia Bukan Ibu</option>
                    <option>Jangan Panggil Ibu Kafir</option>
                    <option>Getih Ireng</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jam Tayang</label>
                <select name="jam_tayang" class="form-control" required>
                    <option value="">-- Pilih Jam --</option>
                    <option>13:00 WIB</option>
                    <option>16:10 WIB</option>
                    <option>19:40 WIB</option>
                    <option>20:30 WIB</option>
                    <option>13:20 WIB</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kursi</label>
                <input type="text" id="seatInput" name="kursi" placeholder="Klik untuk pilih kursi" class="form-control"
                    readonly onclick="openModal()" required>
            </div>

            <div class="form-group">
                <label>Metode Pembayaran</label>
                <select name="metode_pembayaran" class="form-control" required>
                    <option value="">-- Pilih Metode --</option>
                    <option>Cash</option>
                    <option>QRIS</option>
                    <option>Transfer</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Pembelian</label>
                <input type="date" name="tanggal_pembelian" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Studio</label>
                <select name="studio" class="form-control" required>
                    <option value="">-- Pilih Studio --</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah Tiket</label>
                <input type="number" name="jumlah_tiket" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label>Harga Tiket</label>
                <input type="number" name="harga_tiket" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn-primary">Pesan Sekarang</button>
            <button type="button" class="btn-secondary" onclick="window.location.href='data_pembelian.php'">Lihat Data
                Pembelian</button>

        </form>
    </div>

    
    <div class="modal" id="seatModal">
        <div class="modal-content">
            <h3>Pilih Kursi Anda</h3>
            <div id="seatContainer"></div>
            <button class="close-btn" onclick="closeModal()">Selesai</button>
        </div>
    </div>

    <script>
        const modal = document.getElementById('seatModal');
        const seatContainer = document.getElementById('seatContainer');
        const seatInput = document.getElementById('seatInput');
        const bookedSeats = ['A3', 'B5', 'C2', 'C8'];
        const rows = ['A', 'B', 'C', 'D', 'E'];
        const cols = 10;
        let selectedSeat = '';

        rows.forEach(row => {
            for (let i = 1; i <= cols; i++) {
                const seatId = row + i;
                const seat = document.createElement('div');
                seat.classList.add('seat');
                seat.textContent = seatId;
                if (bookedSeats.includes(seatId)) seat.classList.add('booked');
                seat.addEventListener('click', () => selectSeat(seat, seatId));
                seatContainer.appendChild(seat);
            }
            seatContainer.appendChild(document.createElement('br'));
        });

        function openModal() { modal.style.display = 'flex'; }
        function closeModal() {
            modal.style.display = 'none';
            seatInput.value = selectedSeat || '';
        }
        function selectSeat(element, seatId) {
            if (element.classList.contains('booked')) return;
            document.querySelectorAll('.seat').forEach(seat => seat.classList.remove('selected'));
            element.classList.add('selected');
            selectedSeat = seatId;
        }
        window.onclick = function (event) { if (event.target === modal) closeModal(); }
    </script>

</body>

</html>