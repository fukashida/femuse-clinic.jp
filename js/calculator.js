function toggleCalculator() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    const panel = document.getElementById('calculatorPanel');
    panel.classList.toggle('active');
    const pointer = document.getElementById('pointer');
    pointer.classList.toggle('active');
}

function calculateTotal() {
    // 選択された期間を取得
    const selectedPeriod = parseInt(document.querySelector('input[name="period"]:checked').value);

    // 選択されたサプリメントの価格を合計
    const checkboxes = document.querySelectorAll('.toggle-item input[type="checkbox"]');
    let baseTotal = 0;
    let selectedCount = 0;

    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            baseTotal += parseInt(checkbox.dataset.price);
            selectedCount++;
        }
    });

    // 期間による乗算（税抜）
    const periodTotal = baseTotal * selectedPeriod;

    // 割引率を決定
    const itemDiscountRate = selectedCount >= 3 ? 0.10 : 0;
    let periodDiscountRate = 0;
    if (selectedPeriod === 3) {
        periodDiscountRate = 0.05;
    } else if (selectedPeriod === 6) {
        periodDiscountRate = 0.10;
    }

    // ★ 複利で割引を適用（税抜）
    // 例：10%割引後の金額に対して、さらに10%割引を適用
    const afterItemDiscount = periodTotal * (1 - itemDiscountRate);
    const afterPeriodDiscount = afterItemDiscount * (1 - periodDiscountRate);

    // 各割引額（税抜ベース）
    const itemDiscount = periodTotal - afterItemDiscount;
    const periodDiscountAmount = afterItemDiscount - afterPeriodDiscount;

    // ★ 小計表示用の税込金額
    const periodTotalWithTax = Math.floor(periodTotal * 1.1);
    const itemDiscountWithTax = Math.floor(itemDiscount * 1.1);
    const periodDiscountWithTax = Math.floor(periodDiscountAmount * 1.1);

    // 合計税込金額
    const totalWithTax = Math.floor(afterPeriodDiscount * 1.1);

    // 1ヶ月あたりの金額
    const monthlyAmount = Math.floor(totalWithTax / selectedPeriod);

    // 結果を表示（すべて税込）
    document.getElementById('baseAmount').textContent = `${periodTotalWithTax.toLocaleString()}円`;
    document.getElementById('itemDiscount').textContent = selectedCount >= 3 ? `-${itemDiscountWithTax.toLocaleString()}円` : '0円';

    const periodDiscountLabel = document.getElementById('periodDiscountLabel');
    const periodDiscountElement = document.getElementById('periodDiscount');

    if (selectedPeriod > 1) {
        periodDiscountLabel.textContent = `${selectedPeriod}ヶ月セット割引`;
        periodDiscountElement.textContent = `-${periodDiscountWithTax.toLocaleString()}円`;
    } else {
        periodDiscountLabel.textContent = 'セット割引';
        periodDiscountElement.textContent = '0円';
    }

    document.getElementById('totalAmount').textContent = `${totalWithTax.toLocaleString()}円`;
    document.getElementById('monthlyAmount').textContent = `${monthlyAmount.toLocaleString()}円/月`;
}

function updateToggleVisuals() {
    const toggleItems = document.querySelectorAll('.toggle-item');
    toggleItems.forEach(item => {
        const checkbox = item.querySelector('input[type="checkbox"]');
        if (checkbox.checked) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

// イベントリスナーを設定
document.addEventListener('DOMContentLoaded', function() {
    const periodRadios = document.querySelectorAll('input[name="period"]');
    const supplementCheckboxes = document.querySelectorAll('.toggle-item input[type="checkbox"]');

    periodRadios.forEach(radio => {
        radio.addEventListener('change', calculateTotal);
    });

    supplementCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateToggleVisuals();
            calculateTotal();
        });
    });

    // 初期計算
    calculateTotal();
    updateToggleVisuals();
});