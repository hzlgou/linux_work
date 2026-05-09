# 学生成绩管理系统

基于 Laravel 10 构建的学生成绩管理系统，支持成绩的增删改查、分页和搜索功能。

## 功能特性

- 成绩列表展示（分页）
- 添加学生成绩
- 编辑学生成绩
- 删除学生成绩
- 姓名搜索功能
- 响应式设计，支持移动端

## 技术栈

| 组件 | 技术 |
|------|------|
| 后端框架 | Laravel 10.x |
| 语言 | PHP 8.1+ |
| 数据库 | MySQL 8.0 |
| 前端模板 | Blade + 原生 CSS |
| 构建工具 | Vite |

## 项目结构

```
student-scores/
├── app/
│   ├── Http/Controllers/
│   │   └── ScoreController.php    # 成绩控制器
│   └── Models/
│       └── Scorename.php          # 成绩模型
├── database/
│   ├── migrations/
│   │   └── *_create_scorename_table.php  # 数据表迁移
│   └── seeders/
│       └── ScorenameSeeder.php    # 示例数据
├── resources/views/scores/
│   └── index.blade.php            # 成绩视图
├── routes/
│   └── web.php                    # 路由定义
└── .env.example                   # 环境配置示例
```

## 快速开始

### 环境要求

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM（可选，用于前端资源编译）

### 安装步骤

1. **克隆项目**
   ```bash
   git clone https://github.com/YOUR_USERNAME/student-scores.git
   cd student-scores
   ```

2. **安装依赖**
   ```bash
   composer install
   ```

3. **配置环境**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **配置数据库**

   编辑 `.env` 文件，修改数据库连接信息：
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=scores
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **创建数据库**
   ```bash
   # 在 MySQL 中创建数据库
   mysql -u root -p -e "CREATE DATABASE scores CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
   ```

6. **运行迁移和填充数据**
   ```bash
   php artisan migrate
   php artisan db:seed --class=ScorenameSeeder
   ```

7. **设置目录权限**
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

8. **启动开发服务器**
   ```bash
   php artisan serve
   ```

9. **访问应用**

   打开浏览器访问 `http://localhost:8000/scores`

## 数据库表结构

**表名**: `scorename`

| 字段 | 类型 | 说明 |
|------|------|------|
| name | CHAR(20) | 学生姓名（主键） |
| score | INT | 成绩分数 |

## API 路由

| 方法 | URL | 功能 |
|------|-----|------|
| GET | /scores | 成绩列表（支持搜索和分页） |
| POST | /scores | 添加成绩 |
| PUT | /scores/{name} | 更新成绩 |
| DELETE | /scores/{name} | 删除成绩 |

## 截图

项目采用紫色渐变主题，界面简洁美观：
- 响应式表格展示
- Modal 弹窗进行添加/编辑/删除操作
- 搜索框实时过滤
- 分页导航

## 开发

### 运行测试
```bash
php artisan test
```

### 编译前端资源
```bash
npm install
npm run build
```

## License

MIT License
# linux_work
