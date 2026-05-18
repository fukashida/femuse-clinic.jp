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
    
    // 期間による乗算
    const periodTotal = baseTotal * selectedPeriod;
    
    // 割引計算
    let itemDiscount = 0;
    let periodDiscountAmount = 0;
    
    // 3つ以上選択時の10%割引
    if (selectedCount >= 3) {
        itemDiscount = Math.floor(periodTotal * 0.1);
    }
    
    // 期間割引
    if (selectedPeriod === 3) {
        periodDiscountAmount = Math.floor(periodTotal * 0.05);
    } else if (selectedPeriod === 6) {
        periodDiscountAmount = Math.floor(periodTotal * 0.10);
    }
    
    // 税抜き小計（割引後）
    const subtotal = periodTotal - itemDiscount - periodDiscountAmount;
    
    // 税込み金額
    const totalWithTax = Math.floor(subtotal * 1.1);
    
    // 1ヶ月あたりの金額
    const monthlyAmount = Math.floor(totalWithTax / selectedPeriod);
    
    // 結果を表示
    document.getElementById('baseAmount').textContent = `${periodTotal.toLocaleString()}円`;
    document.getElementById('itemDiscount').textContent = selectedCount >= 3 ? `-${itemDiscount.toLocaleString()}円` : '0円';
    
    const periodDiscountLabel = document.getElementById('periodDiscountLabel');
    const periodDiscountElement = document.getElementById('periodDiscount');
    
    if (selectedPeriod > 1) {
        periodDiscountLabel.textContent = `${selectedPeriod}ヶ月セット割引`;
        periodDiscountElement.textContent = `-${periodDiscountAmount.toLocaleString()}円`;
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