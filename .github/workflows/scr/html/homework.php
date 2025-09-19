<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الواجبات | 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- الشريط الجانبي -->
       
        
        <!-- المحتوى الرئيسي -->
        <div class="main-content">
            <div class="header">
                <button class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="page-title">
                    <h1>إدارة الواجبات</h1>
                </div>
                
                <div class="user-profile">
                    <div class="user-info">
                        <h4>محمد أحمد</h4>
                        <p>طالب</p>
                    </div>
                    <img src="https://via.placeholder.com/45" alt="User Avatar" class="user-avatar">
                </div>
            </div>
            
            <!-- فلاتر الواجبات -->
            <div class="filters">
                <button class="filter-btn active">الكل</button>
                <button class="filter-btn">المعلقة</button>
                <button class="filter-btn">المسلمة</button>
                <button class="filter-btn">المتأخرة</button>
            </div>
            
            <!-- قائمة الواجبات -->
            <div class="assignments-container">
                <!-- واجب معلق -->
                <div class="assignment-card pending fade-in">
                    <div class="assignment-header">
                        <div>
                            <span class="assignment-subject">الرياضيات</span>
                            <h3 class="assignment-title">حل تمارين الفصل الثالث</h3>
                            <div class="assignment-due-date">
                                <i class="far fa-calendar-alt"></i>
                                <span>آخر موعد للتسليم: 15 مايو 2025</span>
                            </div>
                        </div>
                        <span class="assignment-status status-pending">معلقة</span>
                    </div>
                    
                    <div class="assignment-details">
                        <div class="detail-item">
                            <span class="detail-label">الدرجة الكاملة</span>
                            <span class="detail-value">20 نقطة</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">تاريخ النشر</span>
                            <span class="detail-value">1 مايو 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">نوع الواجب</span>
                            <span class="detail-value">ملف PDF</span>
                        </div>
                    </div>
                    
                    <div class="assignment-actions">
                        <button class="btn btn-primary ripple submit-assignment" data-id="1">
                            <i class="fas fa-paper-plane"></i> تسليم الواجب
                        </button>
                        <button class="btn btn-outline ripple">
                            <i class="fas fa-eye"></i> معاينة الواجب
                        </button>
                    </div>
                </div>
                
                <!-- واجب مسلم -->
                <div class="assignment-card submitted fade-in delay-1">
                    <div class="assignment-header">
                        <div>
                            <span class="assignment-subject">اللغة العربية</span>
                            <h3 class="assignment-title">موضوع تعبير عن التكنولوجيا</h3>
                            <div class="assignment-due-date">
                                <i class="far fa-calendar-alt"></i>
                                <span>آخر موعد للتسليم: 10 مايو 2025</span>
                            </div>
                        </div>
                        <span class="assignment-status status-submitted">مسلمة</span>
                    </div>
                    
                    <div class="assignment-details">
                        <div class="detail-item">
                            <span class="detail-label">الدرجة الكاملة</span>
                            <span class="detail-value">15 نقطة</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">تاريخ التسليم</span>
                            <span class="detail-value">8 مايو 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">الحالة</span>
                            <span class="detail-value">قيد التصحيح</span>
                        </div>
                    </div>
                    
                    <div class="assignment-actions">
                        <button class="btn btn-outline ripple">
                            <i class="fas fa-eye"></i> معاينة التسليم
                        </button>
                        <button class="btn btn-outline ripple">
                            <i class="fas fa-download"></i> تحميل الواجب
                        </button>
                    </div>
                </div>
                
                <!-- واجب متأخر -->
                <div class="assignment-card missing fade-in delay-2">
                    <div class="assignment-header">
                        <div>
                            <span class="assignment-subject">العلوم</span>
                            <h3 class="assignment-title">تجربة التفاعلات الكيميائية</h3>
                            <div class="assignment-due-date">
                                <i class="far fa-calendar-alt"></i>
                                <span>آخر موعد للتسليم: 5 مايو 2025</span>
                            </div>
                        </div>
                        <span class="assignment-status status-missing">متأخرة</span>
                    </div>
                    
                    <div class="assignment-details">
                        <div class="detail-item">
                            <span class="detail-label">الدرجة الكاملة</span>
                            <span class="detail-value">25 نقطة</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">تاريخ النشر</span>
                            <span class="detail-value">20 أبريل 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">الخصم</span>
                            <span class="detail-value">5 نقاط (تأخير)</span>
                        </div>
                    </div>
                    
                    <div class="assignment-actions">
                        <button class="btn btn-primary ripple submit-assignment" data-id="3">
                            <i class="fas fa-paper-plane"></i> تسليم متأخر
                        </button>
                        <button class="btn btn-outline ripple">
                            <i class="fas fa-eye"></i> معاينة الواجب
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- طبقة التعتيم للجوال -->
        <div class="overlay"></div>
        
        <!-- نموذج تسليم الواجب -->
        <div class="modal" id="submitModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">تسليم الواجب</h3>
                    <button class="close-modal">&times;</button>
                </div>
                
                <form id="assignmentForm">
                    <input type="hidden" id="assignmentId">
                    
                    <div class="form-group">
                        <label for="assignmentTitle" class="form-label">عنوان الواجب</label>
                        <input type="text" id="assignmentTitle" class="form-control" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="assignmentSubject" class="form-label">المادة الدراسية</label>
                        <input type="text" id="assignmentSubject" class="form-control" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">رفع ملف الواجب</label>
                        <div class="file-upload" id="fileUpload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <div class="file-upload-text">انقر لرفع الملف</div>
                            <div class="file-upload-hint">الحد الأقصى لحجم الملف: 10MB</div>
                            <div class="file-name" id="fileName"></div>
                        </div>
                        <input type="file" id="fileInput" style="display: none;">
                    </div>
                    
                    <div class="form-group">
                        <label for="assignmentNotes" class="form-label">ملاحظات (اختياري)</label>
                        <textarea id="assignmentNotes" class="form-control" rows="3"></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline close-modal">إلغاء</button>
                        <button type="submit" class="btn btn-primary ripple">تسليم الواجب</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="main.js">
     
    </script>
</body>
</html>
