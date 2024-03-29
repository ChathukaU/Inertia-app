<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in students" :key="student.id">
                    <td>{{ student.id }}</td>
                    <td>{{ student.name }}</td>
                    <td>{{ student.image }}</td>
                    <td>{{ student.age }}</td>
                    <td>{{ student.status }}</td>
                    <td>
                        <button @click="editStudent(student)">Edit</button>
                        <button @click="deleteStudent(student.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        students: {
            type: Array,
            required: true
        }
    },
    methods: {
        editStudent(student) {
            // Implement edit functionality
        },
        deleteStudent(studentId) {
            // Implement delete functionality
        }
    }
}
</script>
