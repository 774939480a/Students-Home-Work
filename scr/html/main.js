   
        // تفعيل القائمة الجانبية على الجوال
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.overlay').classList.toggle('active');
        });

        // إغلاق القائمة عند النقر على التعتيم
        document.querySelector('.overlay').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('active');
            this.classList.remove('active');
            document.getElementById('submitModal').classList.remove('active');
        });

        // تأثير الريبل للأزرار
        const buttons = document.querySelectorAll('.ripple');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const x = e.clientX - e.target.getBoundingClientRect().right;
                const y = e.clientY - e.target.getBoundingClientRect().top;
                
                const ripples = document.createElement('span');
                ripples.style.right = x + 'px';
                ripples.style.top = y + 'px';
                this.appendChild(ripples);
                
                setTimeout(() => {
                    ripples.remove();
                }, 1000);
            });
        });

        // فلترة الواجبات
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.textContent;
                const assignments = document.querySelectorAll('.assignment-card');
                
                assignments.forEach(assignment => {
                    assignment.style.display = 'block';
                    
                    if (filter === 'المعلقة' && !assignment.classList.contains('pending')) {
                        assignment.style.display = 'none';
                    } else if (filter === 'المسلمة' && !assignment.classList.contains('submitted')) {
                        assignment.style.display = 'none';
                    } else if (filter === 'المتأخرة' && !assignment.classList.contains('missing')) {
                        assignment.style.display = 'none';
                    }
                });
            });
        });

        // فتح نموذج تسليم الواجب
        document.querySelectorAll('.submit-assignment').forEach(btn => {
            btn.addEventListener('click', function() {
                const assignmentId = this.getAttribute('data-id');
                const assignmentCard = this.closest('.assignment-card');
                const title = assignmentCard.querySelector('.assignment-title').textContent;
                const subject = assignmentCard.querySelector('.assignment-subject').textContent;
                
                document.getElementById('assignmentId').value = assignmentId;
                document.getElementById('assignmentTitle').value = title;
                document.getElementById('assignmentSubject').value = subject;
                
                document.getElementById('submitModal').classList.add('active');
                document.querySelector('.overlay').classList.add('active');
            });
        });

        // إغلاق النموذج
        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('submitModal').classList.remove('active');
                document.querySelector('.overlay').classList.remove('active');
            });
        });

        // رفع الملف
        document.getElementById('fileUpload').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                document.getElementById('fileName').textContent = fileName;
                document.getElementById('fileName').style.display = 'block';
            }
        });

        // تسليم الواجب
        document.getElementById('assignmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const assignmentId = document.getElementById('assignmentId').value;
            const fileInput = document.getElementById('fileInput');
            const notes = document.getElementById('assignmentNotes').value;
            
            if (fileInput.files.length === 0) {
                alert('يرجى اختيار ملف لتسليمه');
                return;
            }
            
            // هنا سيتم إرسال البيانات إلى الخادم
            const formData = new FormData();
            formData.append('assignmentId', assignmentId);
            formData.append('file', fileInput.files[0]);
            formData.append('notes', notes);
            
            // محاكاة إرسال البيانات
            console.log('تم تسليم الواجب:', {
                assignmentId,
                fileName: fileInput.files[0].name,
                notes
            });
            
            // إظهار رسالة نجاح
            alert('تم تسليم الواجب بنجاح');
            
            // إغلاق النموذج
            document.getElementById('submitModal').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
            
            // إعادة تعيين النموذج
            this.reset();
            document.getElementById('fileName').style.display = 'none';
            
            // في تطبيق حقيقي، هنا ستقوم بتحديث واجهة المستخدم لتعكس حالة التسليم الجديدة
        });

        // جلب بيانات الواجبات من الخادم
        async function fetchAssignments() {
            try {
                // هنا سيتم استدعاء API لجلب البيانات الفعلية
                // const response = await fetch('/api/student/assignments');
                // const data = await response.json();
                
                // بيانات وهمية للتوضيح
                const mockData = [
                    {
                        id: 1,
                        title: "حل تمارين الفصل الثالث",
                        subject: "الرياضيات",
                        dueDate: "2025-05-15",
                        maxScore: 20,
                        status: "pending",
                        publishedDate: "2025-05-01",
                        type: "ملف PDF"
                    },
                    {
                        id: 2,
                        title: "موضوع تعبير عن التكنولوجيا",
                        subject: "اللغة العربية",
                        dueDate: "2025-05-10",
                        maxScore: 15,
                        status: "submitted",
                        submittedDate: "2025-05-08",
                        gradeStatus: "قيد التصحيح"
                    },
                    {
                        id: 3,
                        title: "تجربة التفاعلات الكيميائية",
                        subject: "العلوم",
                        dueDate: "2025-05-05",
                        maxScore: 25,
                        status: "missing",
                        publishedDate: "2025-04-20",
                        penalty: "5 نقاط (تأخير)"
                    }
                ];
                
                // يمكنك هنا تحديث واجهة المستخدم بالبيانات الفعلية عند توفرها
                
            } catch (error) {
                console.error('Error fetching assignments:', error);
            }
        }

        // جلب البيانات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', fetchAssignments);