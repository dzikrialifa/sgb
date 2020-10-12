const card = document.querySelectorAll('.card');
const detail = document.querySelectorAll('.btn-detail');
const modalbody = document.querySelector('.modal-body');
const BASE_URL = "localhost/sgb/Home/data";
const img = document.querySelectorAll('.card-img-top');
detail.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        // const dataid        = element.getAttribute('data-id');
        // const img = document.querySelectorAll('.card-img-top');
    
        console.log(img);
        const nama          = element.getAttribute('data-nama');
        const alamat        = element.getAttribute('data-alamat');
        const deskripsi     = element.getAttribute('data-deskripsi');
        const telepon       = element.getAttribute('data-telepon');
        // console.log(element);
        
        modalbody.innerHTML = `
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group">
                            <label for="">Nama Panti</label>
                            <input type="text" name="" id="" class="form-control" disabled value="`+ nama +`">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea type="text" name="" id="" class="form-control" disabled>`+ alamat +`</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" name="" id="" class="form-control" disabled>`+ deskripsi +`</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="" id="" class="form-control" disabled value="`+ telepon +`">
                        </div>
                        <div class="form-group">
                            <img src="http://localhost/sgb/assets/img/28153063_192585764670145_8268504582506676224_n.png" class="img-thumbnail" style="width:auto;height:150px;object-fit:cover;"></img>
                        </div>
                    </form>
                </div>
            </div>
        `;
    })
});


// for (let i = 0; i < detail.length; i++) {
//     detail[i].addEventListener('click', (e) => {
//         e.preventDefault();
//         alert('tombol ke '+i);
//     })
// }
