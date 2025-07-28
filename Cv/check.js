 document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault(); // 阻止表单默认提交
            
            // 获取输入值
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value;
            
            // 重置错误信息
            document.getElementById('usernameError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('loginMessage').textContent = '';
            
            // 验证输入
            let isValid = true;
            
            if (username === '') {
                document.getElementById('usernameError').textContent = '请输入用户名';
                isValid = false;
            }
            
            if (password === '') {
                document.getElementById('passwordError').textContent = '请输入密码';
                isValid = false;
            } else if (password.length < 4) {
                document.getElementById('passwordError').textContent = '密码长度至少6位';
                isValid = false;
            }
            
            // 如果验证通过，模拟登录
            if (isValid) {
                // 这里是模拟登录（实际应用中应发送AJAX请求到服务器）
                setTimeout(() => {
                    // 模拟的登录检查（实际应用中需替换为真实验证）
                    if (username === "HELLO" && password === "HELLO") {
                        showMessage('登录成功！正在跳转...', 'success');
						window.location.href = '/dashboard';
						window.location.href = "home.php";
                        // 实际登录成功后通常会有页面跳转
                        // 
                    } else {
                        showMessage('用户名或密码错误', 'error');
                    }
                }, 1000); // 模拟网络延迟
            }
        });
        
        function showMessage(msg, type) {
            const msgDiv = document.getElementById('loginMessage');
            msgDiv.textContent = msg;
            msgDiv.className = type === 'success' ? 'success' : 'error';
        }