document.addEventListener('DOMContentLoaded', function() {
    const createBlogBtn = document.querySelector('.create-blog-btn');
    const createBlogModal = document.getElementById('createBlogModal');
    const closeBtn = document.querySelector('.close');
    const blogForm = document.getElementById('blogForm');
    const blogGrid = document.querySelector('.blog-grid');
    let lastAddedBlogPost = null; // Track the reference to the last added blog post
  
    // Open modal to create a new blog post
    createBlogBtn.addEventListener('click', function() {
      createBlogModal.style.display = 'block';
    });
  
    // Close modal
    closeBtn.addEventListener('click', function() {
      createBlogModal.style.display = 'none';
    });
  
    // Save new blog post
    blogForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const blogTitle = document.getElementById('blogTitle').value;
      const blogIntroduction = document.getElementById('blogIntroduction').value;
      if (blogTitle && blogIntroduction) {
        const blogPost = document.createElement('div');
        blogPost.classList.add('blog-post');
        blogPost.innerHTML = `
          <div class="blog-introduction">
            <h3>${blogTitle}</h3>
            <p>${blogIntroduction}</p>
            <a href="#">Read More</a>
            <button class="delete-btn">Delete</button>
          </div>
        `;
        blogGrid.appendChild(blogPost);
        createBlogModal.style.display = 'none';
  
        // Remove delete event listener from the previous last added blog post
        if (lastAddedBlogPost) {
          lastAddedBlogPost.querySelector('.delete-btn').removeEventListener('click', deleteBlogPost);
        }
  
        // Attach delete event listener to the delete button of the newly added blog post
        const deleteBtn = blogPost.querySelector('.delete-btn');
        deleteBtn.addEventListener('click', deleteBlogPost);
  
        // Update the reference to the last added blog post
        lastAddedBlogPost = blogPost;
      } else {
        alert('Please enter both title and introduction for the blog post.');
      }
    });
  
    // Function to handle deletion of the last added blog post
    function deleteBlogPost() {
      if (lastAddedBlogPost) {
        lastAddedBlogPost.remove(); // Remove the last added blog post from the DOM
        lastAddedBlogPost = null; // Reset the reference to the last added blog post
      }
    }
  });
  