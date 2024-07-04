<nav>
    <div class="container">
        <div style="display: flex; align-items:center'">
            <a href="{{ route('user.list_post_social') }}" class="btn-game" style="margin-right:10px">
                <i class="fa-solid fa-backward"></i>
            </a>
            <h2 class="logo">
                <a href="{{ route('user.view_list_topic') }}" style="color: #2EB872;text-decoration: none;">Diễn
                    Đàn Động Vật</a>
            </h2>
        </div>

        <div class="create">
            <a href="" class="btn-game">
                <i class="fa-solid fa-gift"></i>
                Đổi quà
            </a>
            <a href="{{ route('user.history-game') }}" class="btn-game">
                <i class="fa fa-history" aria-hidden="true"></i> Lịch sử chơi
            </a>
            <div class="profile-picture" id="profile-picture">
                <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
            </div>
            <div id="dropdown-menu" class="dropdown-menu" style="display: none;">
                <a id="editUser">Cập nhật tài khoản</a>
                <a href="">Đăng xuất</a>
            </div>

        </div>
    </div>
</nav>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: auto;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10px auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        border-radius: 5px;
        position: relative;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .form-p label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-p input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-p input[readonly] {
        background-color: #e9ecef;
        /* Màu nền mờ */
        opacity: 0.7;
        /* Độ mờ */
        cursor: not-allowed;
        /* Con trỏ chuột */
    }
</style>

<div id="updateAccountModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Cập nhật tài khoản</h2>
        <form id="updateAccountForm">
            <div class="form-p">
                <label for="username">Tên:</label>
                <input type="text" id="username" name="username" value="Cuong">
            </div>
            <div class="form-p">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="cuong@gmail.com" readonly>
            </div>
            <div class="form-p">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" value="skdjskdjksa">
            </div>
            <div class="form-p">
                <label for="continentImage">Hình ảnh</label>
                <input type="file" class="form-control-file" name="image" id="continentImage"
                    onchange="previewImage(event)" required>
            </div>
            <div class="preview-container">
                <img id="imagePreview" src="#" alt="Preview"
                    style="display: none; width: auto; height: 220px;" />
            </div>
            <button type="submit" class="btn-game" style="margin-top: 15px;">Lưu thay đổi</button>
        </form>
    </div>
</div>
<script>
    document.getElementById('profile-picture').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdown-menu');
        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });

    document.addEventListener('click', function(event) {
        var profilePicture = document.getElementById('profile-picture');
        var dropdownMenu = document.getElementById('dropdown-menu');

        if (!profilePicture.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });

    var modal = document.getElementById('updateAccountModal');

    var updateAccountLink = document.querySelector('#editUser');

    var closeBtn = document.getElementsByClassName('close')[0];

    updateAccountLink.onclick = function() {
        modal.style.display = 'block';
    }

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    var updateAccountForm = document.getElementById('updateAccountForm');

    updateAccountForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(updateAccountForm);
        var username = formData.get('username');
        var password = formData.get('password');

        modal.style.display = 'none';
    });

    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function() {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = reader.result;
            imagePreview.style.display = 'block';
        }

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
