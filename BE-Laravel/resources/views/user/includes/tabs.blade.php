<style>
    .container_select_mui {
        position: relative;
        /* max-width: 320px; */
        width: 100%;
        margin: auto;
    }

    .btn-select {
        display: flex;
        height: 50px;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        border-radius: 8px;
        background-color: #fff;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-select .btn-text {
        font-size: 17px;
        font-weight: 400;
        color: #333;
    }

    .btn-select .arrow-down {
        display: flex;
        height: 21px;
        width: 21px;
        color: #fff;
        font-size: 14px;
        border-radius: 50%;
        background-color: #2EB872;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .btn-select.open .arrow-down {
        transform: rotate(-180deg);
    }

    .list-items {
        position: relative;
        margin-top: 15px;
        border-radius: 8px;
        background-color: #fff;
        padding: 16px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        display: none;
    }

    .btn-select.open~.list-items {
        display: block;
    }

    .list-items .item {
        display: flex;
        align-items: center;
        list-style: none;
        height: 50px;
        cursor: pointer;
        transition: 0.3s;
        padding: 0 15px;
        border-radius: 8px;
    }

    .list-items .item:hover {
        background-color: #e7edfe;
    }

    .item .item-text {
        font-size: 16px;
        font-weight: 400;
        color: #333;
    }

    .item .checkbox {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 16px;
        width: 16px;
        border-radius: 4px;
        margin-right: 12px;
        border: 1.5px solid #c0c0c0;
        transition: all 0.3s ease-in-out;
    }

    .item.checked .checkbox {
        background-color: #2EB872;
        border-color: #2EB872;
    }

    .checkbox .check-icon {
        color: #fff;
        font-size: 11px;
        transform: scale(0);
        transition: 0.3s ease-in-out;
    }

    .item.checked .check-icon {
        transform: scale(1);
    }

    .tabs {
        display: flex;
        position: relative;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 6px;
        border-radius: 15px;
        background-color: #2EB872;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 14px;
        text-align: center;
        color: #2EB872;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-icon {
        font-size: 20px;
        width: 32px;
        position: relative;
        top: 2px;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: rgba(194, 53, 100, 0.05);
        border-color: rgba(194, 53, 100, 0.1);
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .tab-pane h2 {
        font-size: 24px;
        margin-bottom: 8px;
    }
</style>
<div class="col-4">
    <div class="tabs">
        <div class="tab-item active">
            <i class="tab-icon fas fa-code"></i>
            HABITAT
        </div>
        <div class="tab-item">
            <i class="tab-icon fas fa-cog"></i>
            TAXONOMY
        </div>
        <div class="tab-item">
            <i class="tab-icon fas fa-plus-circle"></i>
            PROPERTIES
        </div>
        <div class="line"></div>
    </div>

    <!-- Tab content -->
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="container_select_mui">
                <div class="btn-select">
                    <span class="btn-text">Contident</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">North America</span>
                    </li>
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Europe</span>
                    </li>
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Asia</span>
                    </li>
                </ul>
            </div>
            <div class="container_select_mui mt-2">
                <div class="btn-select">
                    <span class="btn-text">Country</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Canada</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane">
            <h2>TAXONOMY</h2>
            <p>Phân loại học nghiên cứu về phân loại mọi vật – vật sống, vật vô sinh, chỗ và sự kiện – tất
                cả được phân loại theo giản đồ phân loại.</p>
        </div>
        <div class="tab-pane">
            <h2>PROPERTIES</h2>
            <div class="container_select_mui">
                <div class="btn-select">
                    <span class="btn-text">Active Day Period</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Nocturnal</span>
                    </li>
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Cathemeral </span>
                    </li>
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Diurnal</span>
                    </li>
                </ul>
            </div>
            <div class="container_select_mui mt-2">
                <div class="btn-select">
                    <span class="btn-text">Diet</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Omnivore</span>
                    </li>
                </ul>
            </div>
            <div class="container_select_mui mt-2">
                <div class="btn-select">
                    <span class="btn-text">Domestication</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Wild</span>
                    </li>
                </ul>
            </div>
            <div class="container_select_mui mt-2">
                <div class="btn-select">
                    <span class="btn-text">Lifestyle</span>
                    <span class="arrow-down">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>

                <ul class="list-items">
                    <li class="item">
                        <span class="checkbox">
                            <i class="fas fa-check check-icon"></i>
                        </span>
                        <span class="item-text">Semiaquatic</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script>
    /* Created bt Tivotal */

    document.querySelectorAll('.container_select_mui').forEach(container => {
        const btn = container.querySelector('.btn-select');
        const items = container.querySelectorAll('.item');

        btn.addEventListener('click', () => {
            btn.classList.toggle('open');
        });

        items.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('checked');

                let btnText = container.querySelector('.btn-text');
                let checked = container.querySelectorAll('.checked');

                if (checked && checked.length > 0) {
                    btnText.innerText = `${checked.length} Selected`;
                } else {
                    btnText.innerText = 'Select Preferences';
                }
            });
        });
    });
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    // SonDN fixed - Active size wrong size on first load.
    // Original post: https://www.facebook.com/groups/649972919142215/?multi_permalinks=1175881616551340
    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>
