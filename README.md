# Task Management Backend

**Developer:** Saqib Javaid
**Contact:** 03024955797
**Framework:** Laravel 10
**Authentication:** JWT Token
**Frontend:** Nuxt 3
**Git Repository:**

-   Frontend: https://github.com/saqibdevcodes/task_management_frontend.git
-   Backend: https://github.com/saqibdevcodes/task_management_backend.git

**Time Consumed:** Approximately 2.5 hours (within 3 hours) (both frontend and backend)

## What I've Done

### Authentication

-   **JWT Authentication:** Implemented JWT token-based authentication system
-   **Login API:** Created REST API endpoint for user login with JWT token generation

### Task Management APIs

Created comprehensive REST APIs for task management, all wrapped in authentication middleware:

-   **Create Task:** `POST /api/tasks` - Create a new task
-   **Delete Task:** `DELETE /api/tasks/{id}` - Delete a specific task
-   **Toggle Task:** `PATCH /api/tasks/{id}/toggle` - Toggle task completion status

### Security & Middleware

-   All task APIs are protected with JWT authentication middleware
-   Proper token validation and user authorization
-   Secure API endpoints with proper error handling

## Database Setup

**Important:** After running migrations, make sure to seed the database to create the test user.

# Seed the database (IMPORTANT - creates test user)

php artisan db:seed (after you migrate the db)

```

### Test User Credentials

- **Email:** test@example.com
- **Password:** password123

Use these credentials to login via the `/api/login` endpoint.

## API Endpoints

### Authentication

```

POST /api/login

-   Body: { email, password }
-   Response: { token, user }

```

### Tasks

```

GET /api/tasks - Get all tasks (authenticated)
POST /api/tasks - Create new task (authenticated)
DELETE /api/tasks/{id} - Delete task (authenticated)
PATCH /api/tasks/{id}/toggle - Toggle task status (authenticated)

```

## Future Improvements

If I had more time, I would:

-   Add email notifications for task CRUD operations
-   Implement task filtering and search
-   Add task categories/tags
-   Implement task assignment to users
```
